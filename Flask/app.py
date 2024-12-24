from flask import Flask, request, jsonify
from services.extractCV import extract_text_from_pdf
from services.getCleanHTML import clean_html
from services.openAI_service import get_openai_score
import os
import re
import time


app = Flask(__name__)


@app.route('/process-cv', methods=['POST'])
def process_cv():
    # Check if file is provided
    if 'file' not in request.files:
        return jsonify({"error": "File CV tidak ditemukan"}), 400
    file = request.files['file']
    
    folder_path = 'C:\\GokerTemp'

    if not os.path.exists(folder_path):
        os.makedirs(folder_path)

    file_path = os.path.join(folder_path, file.filename)
    file.save(file_path)
    
    
    try:
        cv_text = extract_text_from_pdf(file_path)
    except Exception as e:
        return jsonify({"error": f"Gagal membaca file PDF: {str(e)}"}), 500
    finally:
        if os.path.exists(file_path):
            os.remove(file_path)
    
    
   
    # Retrieve job requirement and job desk from the request
    job_requirement = request.form.get('requirement', '')
    job_desk = request.form.get('jobdesk', '')

    # Clean HTML content
    job_requirement_cleaned = clean_html(job_requirement)
    job_desk_cleaned = clean_html(job_desk)


    try:
        result = get_openai_score(cv_text, job_requirement_cleaned, job_desk_cleaned)
    except Exception as e:
        return jsonify({"error": f"OpenAI API Error: {str(e)}"}), 500
    # pdf_end = time.time()
    
    # print(f"Get score: {pdf_end - pdf_start}")
    # print(result)
    # Return result to Laravel
    # print(result) # Ah, 1 + 1 adalah 2!
    score_match = re.search(r"Score: (\d+\.\d+)", result)
    score = float(score_match.group(1)) if score_match else None

    # Extract reasons (everything after "Penjelasan:")
    reasons_match = re.search(r"Penjelasan:([\s\S]*)", result)
    reasons = reasons_match.group(1).strip() if reasons_match else None

    # print(score, reasons)
    return jsonify({"score": score, 
                    "reason": reasons})


if __name__ == '__main__':
    app.run(host='127.0.0.1', port=5000, debug=True)
    

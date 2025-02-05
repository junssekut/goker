from openai import OpenAI
import time

client = OpenAI(
  base_url="https://openrouter.ai/api/v1",
  api_key="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",
)

def get_openai_score(cv_text, job_requirement, job_desk):
    prompt = f""" 
    Berikut adalah data yang diberikan:

    Job Requirement:
    {job_requirement}

    Job Desk:
    {job_desk}
    
    CV Pelamar:
    {cv_text}

    Berikan score kecocokannya dengan tipe data decimal 0 - 100 dengan penjelasannya dibawah
    Format output
    Score: ... (pastikan output desimal tidak boleh bilangan bulat dan ada satu spasi setelah titik dua)
    Penjelasan: ... (dalam bahasa Indonesia, hanya berupa teks tanpa simbol atau bold, minimal 5 kalimat atau satu  pragraf yang detail, ada satu spasi setelah titik dua)
    Pastikan output sesuai format yang diminta
    """
    
    sysPrompt = "Anda adalah sebuah model AI yang berperan sebagai HRD dari perushaan Gojek yang bertugas untuk memberikan score kecocokan CV pelamar dengan job requirement dan job desk dari pekerjaan yang diberikan tanpa ada penjelasan sedikitpun"
    
    completion = client.chat.completions.create(
        model="deepseek/deepseek-r1:free",
        messages=[
            {"role": "system", "content": sysPrompt},
            {"role": "user", "content": prompt}
        ],
    )
    print(completion.choices[0].message.content)
    return completion.choices[0].message.content



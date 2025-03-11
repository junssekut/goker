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



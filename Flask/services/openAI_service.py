import openai
import time

openai.api_key = 'pk-KkvQEnbWZeZmPYbeZUPmvjQjikjyzhPkgNuOswFkGwaYgAYl'
openai.base_url = "https://api.pawan.krd/cosmosrp-it/v1"

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
    Score:... (pastikan output desimal tidak boleh bilangan bulat)
    Penjelasan:... (dalam bahasa Indonesia)
    """
    
    sysPrompt = "Anda adalah sebuah model AI yang berperan sebagai HRD dari perushaan Gojek yang bertugas untuk memberikan score kecocokan CV pelamar dengan job requirement dan job desk dari pekerjaan yang diberikan tanpa ada penjelasan sedikitpun"

    # print(prompt);
    # start = time.time()
    response = openai.chat.completions.create(
        model="cosmosrp",
        messages=[
            {"role": "system", "content": sysPrompt},
            {"role": "user", "content": prompt}
        ],
    )
    # end = time.time()
    # print(f"get score: {end - start} s")
    
    return response.choices[0].message.content



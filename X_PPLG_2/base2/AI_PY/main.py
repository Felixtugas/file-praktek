import google.generativeai as genai

#ambil model 
model = genai.GenerativeModel("gemini-3-flash-preview")

#menggunakan key API sendiri
genai.configure(api_key="AIzaSyDn-kMRnOY6IiSKhrxcnE8U9BGIZZXizrE")

#pertanyaan
ask = input("mau tanya apa? ")

#mengolah isi dari pertanyaan
response = model.generate_content(ask)

#Output
print(response.text)
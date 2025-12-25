🩺 AI-Powered Medical Query Platform

This project is a Laravel-based AI medical assistant platform that allows users to submit text or voice-based medical questions and receive AI-generated answers supported by real scientific literature.
The system integrates OpenAI, AssemblyAI, and PubMed (Europe PMC) to deliver accurate, explainable, and evidence-backed responses.

🚀 Key Features

💬 Text-Based Medical Queries
🎙️ Voice Queries (Speech-to-Text using AssemblyAI)
🤖 AI-Powered Responses (OpenAI Chat Completion API)
📚 Scientific References from PubMed
🔍 Automatic Abstract Extraction
👤 User Authentication & Query History
📄 Saved Questions & Responses
🛡️ Secure API key handling via environment variables

🧠 How It Works

User submits a text or audio query
If audio:
Audio is transcribed using AssemblyAI
The extracted text is sent to OpenAI
AI generates a medical response
Important medical terms are extracted
Related PubMed articles are fetched and displayed
Query, response, and references are saved in the database

🛠️ Tech Stack

Backend: Laravel (PHP 8+)
AI Model: OpenAI (Chat Completions)
Speech-to-Text: AssemblyAI
Medical Research API: Europe PMC / PubMed

Database: MySQL

Frontend: Blade, AJAX, jQuery
HTTP Client: Laravel HTTP Client

📦 APIs Used

OpenAI API – Medical response generation
AssemblyAI API – Audio transcription
Europe PMC API – PubMed article search
PubMed Website Scraping – Abstract extraction

🔐 Environment Variables

Create a .env file and add:

OPENAI_API_KEY=your_openai_api_key
ASSEMBLYAI_API_KEY=your_assemblyai_api_key


Then clear cache:
php artisan config:clear

📁 Storage Setup (Required for Audio)
php artisan storage:link
Ensure uploaded audio files are publicly accessible.

📌 Use Cases

Medical Q&A platforms
Health research assistants
Evidence-based clinical decision support
AI healthcare startups
Academic & learning tools

⚠️ Disclaimer

This application is intended for educational and informational purposes only.
It does not replace professional medical advice, diagnosis, or treatment.

🌱 Future Enhancements

Drug–drug interaction checking (DrugBank integration)
Background job queues for API calls
User dashboards with analytics
Multilingual support
PDF report generation

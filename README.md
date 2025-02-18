# covid19Ai

## Overview

covid19Ai is an API-based system designed to analyze chest X-ray images using AI tools to determine whether a patient is affected by COVID-19. The AI model is developed in Python and hosted in a separate repository, while the main application handles image capturing and API communication.

## Technologies Used

- **Python** - Custom AI model development
- **PHP** (47.9%) - Backend logic and API integration
- **HTML** (52.1%) - Frontend UI for user interactions

## Business Logic

1. **Image Capture & Upload**

   - The user uploads a chest X-ray film image via the UI.
   - The system validates the image format before processing.

2. **AI-Based Analysis**

   - The image is sent to a dedicated AI model through an API.
   - The AI tool analyzes the X-ray and determines whether the patient has COVID-19.
   - The API returns a response indicating the likelihood of infection.

3. **Decision & Reporting**

   - The system displays the AI-generated result to the user.
   - A report can be generated for medical professionals.
   - Data can be stored for further analysis or research purposes.

## Installation

1. Clone the repository:
   ```sh
   git clone https://github.com/RaihanBhuiyan/covid19Ai.git
   ```
2. Navigate to the project directory:
   ```sh
   cd covid19Ai
   ```
3. Install dependencies:
   ```sh
   composer install
   ```
4. Set up environment variables:
   ```sh
   cp .env.example .env
   php artisan key:generate
   ```
5. Run the backend server:
   ```sh
   php artisan serve
   ```

## AI Model Setup (Hosted in a Separate Repository)

1. Clone the AI model repository:
   ```sh
   git clone https://github.com/RaihanBhuiyan/covid19Ai-ML.git
   ```
2. Install Python dependencies:
   ```sh
   pip install -r requirements.txt
   ```
3. Run the AI model API server:
   ```sh
   python app.py
   ```

## Usage

- Users upload chest X-ray images via the UI.
- The system processes and sends the image to the AI API.
- AI analyzes and returns COVID-19 detection results.
- Medical professionals can review and download reports.

## API Endpoints

- **POST /analyze** - Upload an image for COVID-19 detection.
- **GET /results/{id}** - Retrieve analysis results for a specific case.

## Contribution

Contributions are welcome! Please follow the standard GitHub flow:

1. Fork the repository.
2. Create a new branch.
3. Commit changes and push.
4. Submit a pull request.

## License

This project is licensed under the MIT License.


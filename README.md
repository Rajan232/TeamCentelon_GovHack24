<div align="center">

  <h3 align="center">Road Crash Dashboard</h3>

  <p align="center">
    A simple admin dashboard for tracking road crash data.
  </p>
</div>


### Built With

* [Laravel Framework](https://laravel.com/)

## Getting Started

To make the starter run on your machine just following below instructions.

### Prerequisites

This is an example of how to list things you need to use the software and how to install them.
* Clone the respository
  ```sh
    git clone https://github.com/Rajan232/TeamCentelon_GovHack24
  ```
* Compatible PHP version(php 8.2) and configs for running Laravel 11.x
* MySQL or MariaDB database
* Configure .env file

### Installation

1. `npm run build` to build the assets
2. `php artisan key:generate`
4. `php artisan migrate:fresh`
5. `php artisan db:seed`
6. `php artisan serve` or another web server that able to run PHP based website

### Authentication
- URL `http://<domain-local>/login` or configurated URL.
- Admin:
    - Email: `admin@local.test` 
    - Password: `password`


## AI Team Contributions

The AI team worked on the exploratory data analysis (EDA) and retrieval-augmented generation (RAG) using large language models (LLMs) for this project. The AI code and results are stored in the `ai-models` folder.

### AI Workflow Overview

1. **EDA (Exploratory Data Analysis)**:
   We analyzed the road crash dataset using Jupyter notebooks to identify key patterns and trends. You can find the detailed EDA analysis in the file:
   - `ai-models/Road_Crash_Data_EDA_Analysis.ipynb`

2. **RAG (Retrieval-Augmented Generation)**:
   We implemented a retrieval-augmented generation model to provide answers based on road crash data using an LLM. The code for this model can be found in:
   - `ai-models/Executive_Summary_AI_Agent.ipynb`

3. **Documentation**:
   Detailed documentation for the AI contributions can be found in the AI folder or the markdown files:
   - `ai-models/EDA_Documentation.md`
   - `ai-models/RAG_Documentation.md`

### Instructions to Run AI Models

1. **Install Dependencies**:
   Make sure you have all necessary libraries installed. You can install the required libraries for the AI models using:
   ```bash
   pip install -r ai-models/requirements.txt

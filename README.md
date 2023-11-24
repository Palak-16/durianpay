# Price Comparison System
Overview :
This project is a proof-of-concept for an internal price comparison system. The system consists of an API and a web interface that allows users to compare product prices across various websites. The API fetches data from different sources, processes it, and returns the results in JSON format. The web interface provides a user-friendly way to input parameters and view the comparison results.

Technologies Used:
- Backend: PHP
- Database: MySQL
- Web Interface: HTML, CSS
- Deployment: Vercel

Project Structure:
- config/config.php: it includes all the database credentials.

- model/db_con.php: This files contains the logic of database connection.

- website: This folder includes all the files which consist of logic of data crawling from various websites.

- api_controller.php: The PHP file containing the API logic for fetching and processing product data from comparison websites.

- services.php: This file consits the logic of all the filters applied on differnt product searches.

- index.html: The HTML file for the web interface, allowing users to input search parameters and displaying the results.

- database.sql: SQL file for creating the necessary database and table structure.


Database Structure :
This project uses a MySQL Database.

API Endpoints
- Endpoint:  http://localhost/durianpay/api_controller.php
- Method: GET
- Parameters:
  - searchdata - e.g.(oppo phone)
  - filter - (highest_price,lowest_price,rank,rating)
  - topN - (default: 3)
  - comparisonWebsites - (shopclues , reliance , gadgets now , bajaj , oxygen, default: all)
    
- API Example: http://localhost/durianpay/api_controller.php?searchdata=oppo&filter=highest_price&topn=50&websites%5B%5D=shopclues&websites%5B%5D=reliance&websites%5B%5D=gadgetsnow


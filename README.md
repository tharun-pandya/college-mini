# College Mini Result Portal

This is a mini-college web portal for managing student results, built using PHP and MySQL. The project simulates a simple academic environment where students can register, view their academic performance, and admins can upload results securely.

> Note: This is an incomplete prototype — built for academic purposes and demonstration of backend logic using PHP-MySQL.

---

## Features

- Student Sign-Up with Roll Number Format
- View and Manage Backlogs
- Toppers List Display
- Session-wise Result Management
- Result Upload Access (via secure pin)
- Basic Static Pages (Home, About)
- Clean modular code with Bootstrap styling

---

## Tech Stack

| Layer        | Technology          |
|--------------|---------------------|
| Frontend     | HTML, CSS, Bootstrap, JavaScript |
| Backend      | PHP                 |
| Database     | MySQL               |
| Hosting Tool | XAMPP (Apache + MySQL) |

---

## How to Run the Project

1. **Install XAMPP**  
   [Download XAMPP](https://www.apachefriends.org/index.html) and install it on your machine.

2. **Place Files in `htdocs`**  
   Copy the extracted project folder (`college-mini`) into:  
   ```
   C:/xampp/htdocs/
   ```

3. **Start Apache & MySQL in XAMPP**

4. **Create the MySQL Database**  
   - Open [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
   - Create a new database (e.g., `college_portal`)
   - Import SQL files

5. **Configure `connect.php`**  
   Ensure your database connection details match your local MySQL setup.

6. **Access the Portal**  
   Navigate to:  
   ```
   http://localhost/college-mini/home.php
   ```

---

## 🔐 Access Credentials & Info

- **Student Sign-Up Format:**  
  ```
  Format: [YY][CollegeCode]-[Branch]-[PIN]  
  Example: 20093-CM-076
  ```
  - `20`: Academic year (changeable)  
  - `093`: College code (**fixed**)  
  - `CM`: Branch (change to EC, EE, etc.)  
  - `076`: Student PIN (customizable)

- **Marks Upload Access PIN:**  
  ```
  sbsp093
  ```

---

## Contact

Built by **Tharun Pandya**  
- Email: ktharunpandya@gmail.com
- LinkedIn : https://linkedin.com/in/tharun-pandya-kodi

---

# Full-Stack Developer Project

## 📌 Project Overview
This project is a full-stack web application built using:

- HTML
- CSS
- JavaScript
- PHP

It demonstrates front-end design, interactive functionality, and back-end integration.

---

## 🚀 Features

- Responsive web design
- Interactive JavaScript functionality
- Backend processing with PHP
- Clean and structured code

---

## 🛠️ Technologies Used

- HTML5
- CSS3
- JavaScript (Vanilla JS)
- PHP

---

## 📂 Project Structure

```
.
├── index.html        # Main webpage
├── bluestyle.css     # Styling file
├── javascript.js     # Frontend logic
├── (PHP files)       # Backend logic
└── README.md         # Project documentation
```

---

## ▶️ How to Run the Project

### Option 1: Run Locally (Frontend Only)

1. Download or clone the repository:
   ```
   git clone https://github.com/your-username/Full-stack-developer.git
   ```

2. Open `index.html` in your browser.

---

### Option 2: Run with PHP (Full Project)

If your project includes PHP:

1. Install XAMPP, WAMP, or use a local PHP server.
2. Place the project inside the `htdocs` folder (if using XAMPP).
3. Start Apache.
4. Open in browser:
   ```
   http://localhost/Full-stack-developer
   ```

Or using PHP built-in server inside the project folder:

```
php -S localhost:8000
```

Then open:
```
http://localhost:8000
```

---

## 🎯 Purpose

This project was created to practice and demonstrate full-stack development skills including frontend design and backend integration.

---

## 📬 Author

Your Name  
GitHub: https://github.com/Tsegai90/Full-stack-developer

---

## 📄 License

This project is for learning and portfolio purposes.
## Pre-selecting Radio Buttons in PHP

The condition:

```php
if(isset($gender) && $gender=="male")
is doing two checks at once:

isset($gender) → checks whether the variable $gender exists.

Usually this means it was sent from the form via $_POST['gender'].

If the user didn’t select a radio button, $gender won’t exist.

$gender == "male" → checks whether the value of $gender is "male".

Only true if the user selected the “Male” option in the form.

✅ Both conditions must be true (that’s why we use &&) for the PHP code to echo checked and pre-select the radio button in the HTML.

In words:

“If the form sent a value for gender and that value is "male", mark this radio button as selected.”


- Save the file (`Ctrl+S` / `Cmd+S`).

---

## 3️⃣ Stage your changes

In the terminal:

```bash
git add README.md
  # PHP OOP Example – Fruit & Strawberry

This is a simple PHP Object-Oriented Programming (OOP) example demonstrating:

- Classes
- Inheritance
- Constructors
- Methods
- Object creation

## 📌 Project Description

This project contains:

- A parent class `Fruit`
- A child class `Strawberry` that extends `Fruit`

The script creates a Strawberry object and displays its properties.

## 🧠 Concepts Used

- Class
- Object
- Constructor
- Inheritance
- Method calling

## ▶️ How to Run (Using PHP Built-in Server)

1. Make sure PHP is installed on your system.
2. Open a terminal/command prompt.
3. Navigate to the project folder:

```bash
cd path/to/php-oop-fruit-example
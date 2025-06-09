# Digital Amethyst Website

## This website developed in 2016

This repository contains the **Digital Amethyst** website — a fully responsive, SEO-friendly web application designed and developed to showcase digital services.

![image](https://github.com/user-attachments/assets/29cc4ba9-cd82-4336-932f-3c2876080e5c)


## Project Overview

**Digital Amethyst** is an online platform that promotes a range of digital services including:

- **Search Engine Optimization (SEO)**
- **Web Development**
- **Book App Conversion** (PDF to Android App and iBook)

The goal of this project is to provide an accessible, multilingual website (English and Arabic versions) that helps clients discover and engage with the offered services.

## Development Stack

This website has been developed using:

- **HTML5** → For creating structured, semantic web content  
- **CSS3** → For designing a responsive and visually appealing layout  
- **PHP** → For server-side scripting and reusable components (header, footer, analytics tracking)  
- **JavaScript / jQuery** → For dynamic user interaction and responsive navigation menu  

### Key Technologies & Keywords

`HTML5`, `CSS3`, `PHP`, `JavaScript`, `jQuery`, `Responsive Design`, `SEO`, `Web Development`, `Digital Marketing`, `UI/UX`, `Multilingual Support`, `Social Media Integration`, `GitHub`, `Version Control`

## Features

- Responsive **navigation menu** built with HTML, CSS, and JavaScript (jQuery toggle menu).
- **Dynamic content inclusion** using PHP (`include` statements for Google Analytics and reusable components).
- **SEO optimized meta tags** (Open Graph, Twitter Cards, meta description, keywords) for enhanced search visibility.
- Language switching support between **English** and **Arabic**.
- **Service detail pages** for SEO, Web Development, and Book App Conversion.
- Integrated **social media links** (Facebook, Instagram, LinkedIn).


## Project Structure

The Digital Amethyst website is organized as a modular, responsive web application with the following structure:



### Example Page Structure — `contact.php`

The `contact.php` page is a responsive **Contact Us** form implemented using:

- **HTML5** semantic structure
- **CSS3** for responsive design
- **PHP** for server-side form handling and validation
- **JavaScript / jQuery** for navigation interactivity
- **SEO meta tags** and **Open Graph** / **Twitter Cards** for enhanced visibility on social media
- **Google Tag Manager** for traffic analytics

#### Key Functional Elements

- **Head Section**:
  - SEO meta tags (`title`, `description`, `keywords`, `og:*`, `twitter:*`)
  - Responsive `viewport` tag
  - External jQuery library
  - Inline JavaScript for **mobile-friendly toggle menu**

- **Body**:
  - Language switch links (English / Arabic)
  - Responsive navigation menu (`mainMenu`)
  - Page banner with logo (`digitalbaner`)
  - Main content area:
    - Contact form with fields:
      - Name
      - Email
      - Message
    - PHP server-side validation (`$nameError`, `$emailError`)
    - Form submission handled by `contactfunction.php`
  - Footer with social media links (Facebook, Instagram, LinkedIn)

#### Security Considerations

- The contact form uses:
  - `htmlspecialchars($_SERVER["PHP_SELF"])` to prevent Cross-Site Scripting (XSS)
  - PHP backend (`contactfunction.php`) to handle form POST requests and sanitize input.

#### Accessibility Features

- Basic form labels for screen readers
- Responsive layout for mobile and tablet accessibility

### Keywords (GitHub indexing)

`PHP`, `HTML5`, `CSS3`, `JavaScript`, `jQuery`, `Responsive Design`, `Contact Form`, `SEO`, `Open Graph`, `Twitter Cards`, `Google Analytics`, `Google Tag Manager`, `Form Validation`, `Cross-site Scripting (XSS) Prevention`, `Multilingual Support`, `UI/UX`, `Social Media Integration`, `Accessibility`, `Mobile-friendly Design`

### Summary of `contact.php`

The `contact.php` page demonstrates:

- Integration of **front-end** and **back-end** development
- Application of **progressive enhancement** and **responsive design**
- Best practices in **SEO optimization** and **analytics tracking**
- Implementation of a secure, accessible **Contact Us form**
- Support for **multilingual users** (English and Arabic)

### How the Contact Form Works — `contactfunction.php` Step by Step

This file handles the form submission process of `contact.php`.  
It validates the input, sanitizes the data, and sends the message to the system email address.


![image](https://github.com/user-attachments/assets/83a75c4f-9997-40ae-8391-f52ac7241b05)


#### 1️ User submits the form

The form in `contact.php` sends a `POST` request containing:

- `name` → Name field
- `email` → Email field
- `message` → Message field

The form action is:

```html
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
```
### 2️ PHP detects form submission

```php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
```





#### 3️ Name field validation

```php
if (empty($_POST["name"])) {
    $nameError = "Name is required";
} else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
        $nameError = "Name: Only letters and white space allowed";
    } else {
        $insertTodata = True;
    }
}
```


If the name field is empty → an error message is shown.

Else:

The value is sanitized using test_input().

A regex checks if the name contains only letters and spaces.

If valid → allow data insertion


### 4️ Email field validation

```php
if (empty($_POST["email"])) {
    $emailError = "Email is required";
    $insertTodata = false;
} else {
    $email = test_input($_POST["email"]);
    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
        $emailError = "Invalid email format";
        $insertTodata = false;
    }
}
```

If the email field is empty → an error is shown.

Else:

The email is sanitized.

A regex checks if the email format is valid.

If invalid → block sending.


### 5️ Message field processing

```php
$message = test_input($_POST['message']);
```

The message field is sanitized using test_input().


### 6️ Sending the email

```php
if($insertTodata){
    $mail_to = 'digitalamethystco@gmail.com';
    $body_message = 'From: '.$name."\n";
    $body_message .= 'E-mail: '.$email."\n";
    $body_message .= 'Message: '.$message;
    $headers = "From:digitalamethystco@gmail.com\r\n";
    $mail_status = mail($mail_to, $subject, $body_message, $headers);
}
```

- If no validation errors (`$insertTodata == true`):

  - The system builds an email message:

    - To: `digitalamethystco@gmail.com`
    - Subject: `$subject` (you may want to define this variable)
    - Body: includes Name, Email, and Message
    - Headers: From `digitalamethystco@gmail.com`

- The email is sent using PHP's built-in `mail()` function.


### 7️ Data sanitization function
```php
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
```

- Removes extra spaces.

- Removes backslashes.

- Converts HTML characters to HTML entities → protects against XSS.


## How to Deploy and Use the Digital Amethyst Website

The **Digital Amethyst** website is a dynamic website built with **PHP**, **HTML5**, **CSS3**, and **JavaScript/jQuery**.  
It is designed to be hosted on any standard **PHP-enabled web server**.

### ⚙️ Deployment Options

#### 1️ Run Locally for Development

You can run the website locally using any of the following solutions:

##### Option A: XAMPP (Cross-platform - Windows/Linux/Mac)

[XAMPP](https://www.apachefriends.org/index.html) is a popular free web server package that includes:

- Apache (web server)
- MySQL/MariaDB (database)
- PHP

**Steps to deploy locally with XAMPP:**

1. Download and install XAMPP.
2. Start the **Apache** module in XAMPP Control Panel.
3. Copy the entire `digitalamethyst` project folder into the `htdocs` directory (usually at `C:\xampp\htdocs\` on Windows).
4. Open a browser and visit:  
   `http://localhost/digitalamethyst/`

##### Option B: MAMP (Mac and Windows)

[MAMP](https://www.mamp.info/en/) works similarly and is a great choice for macOS and Windows users.

##### Option C: WAMP (Windows Only)

[WAMP](http://www.wampserver.com/en/) is another Windows-based solution.

---

#### 2️ Deploy to Live Web Server (Production Hosting)

To deploy the website online:

- Choose any **PHP-enabled web hosting** provider. Examples:
  - [Hostinger](https://www.hostinger.com/)
  - [Bluehost](https://www.bluehost.com/)
  - [A2 Hosting](https://www.a2hosting.com/)
  - or any shared VPS/cloud host with PHP support.
- Upload all website files (including `.php`, `.css`, images) to the web root directory (commonly `public_html/` or `www/`).
- Ensure the server supports **PHP 7.4 or higher** (recommended).
- Configure your domain name to point to the hosting account.

Once deployed, your website will be accessible through your domain, e.g.:  
`https://www.yourdomain.com/`

---

#### 3️ Deploy to GitHub Pages (Static Only - Limitations)

- GitHub Pages supports **only static files** (HTML, CSS, JavaScript).
- PHP code will not run on GitHub Pages (contact form, dynamic content will not work).
- To deploy on GitHub Pages:
  - Convert all `.php` files to `.html`.
  - Remove or replace dynamic PHP functionality with static content.
  - Upload the static version to GitHub Pages.

---

### Summary Table

| Environment | Deployment Solution | Works Fully? |
|-------------|---------------------|--------------|
| Local (development) | XAMPP / MAMP / WAMP | Full PHP support |
| Production (live website) | PHP-enabled web host |  Full PHP support |
| GitHub Pages (static) | GitHub Pages | ⚠️ Only static content (PHP will not run) |

---

### Important Notes

- The Contact Us form requires **server-side PHP** to send emails → this will not work on GitHub Pages.
- For full functionality, deploy on a PHP-enabled hosting server.
- You can preview the design locally with XAMPP/MAMP before going live.

---

![image](https://github.com/user-attachments/assets/04ec6ed5-a71a-494f-879f-4a321130984f)


###  Keywords (Deployment Section)

`PHP Deployment`, `Web Hosting`, `XAMPP`, `MAMP`, `WAMP`, `GitHub Pages`, `Static Hosting`, `Shared Hosting`, `VPS Hosting`, `Apache Web Server`, `PHP Web Development`, `Dynamic Website Deployment`, `Contact Form`, `Email Sending`, `Cross-platform Deployment`, `HTML5`, `CSS3`, `JavaScript`, `Responsive Design`, `SEO-Friendly Website`.














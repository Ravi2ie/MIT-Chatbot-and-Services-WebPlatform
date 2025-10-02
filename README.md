# 🤖 MIT Chatbot & Services Web Platform

A web platform for the MIT (presumably a college or organization) that offers chat functionality and services (complaints, library, transport, outpasses, etc.).  
Built using PHP, HTML/CSS/JS frontend, with supporting scripts, database files, and integrations like a lemmatizer for NLP.

---

## 📂 Project Structure

    ├── 14memasang-chat-box-popup-messenger-facebook.zip
    ├── LINKEDIN 2.png
    ├── about.php
    ├── adduserpass.php
    ├── applications.html
    ├── bitnami.css
    ├── chats.sql
    ├── complaint_mit.php
    ├── composer.json
    ├── composer.lock
    ├── contact.jsx
    ├── database_1.php
    ├── favicon.ico
    ├── homepage.zip
    ├── index.php
    ├── lemmatizer.php
    ├── login.sql
    ├── mailsend.php
    ├── mit_cleaner.php
    ├── mit_club.php
    ├── mit_library.php
    ├── mit_transport.php
    ├── new.php
    ├── office.css
    ├── office.php
    ├── outpass.php
    ├── outpass_login.php
    ├── package-lock.json
    ├── package.json
    ├── php-lemmatizer-master.zip
    ├── privacy.php
    ├── profile.php
    ├── revi (1).zip
    ├── room_cleaning.php
    ├── sem.php
    ├── service.php
    ├── signup.css
    ├── signup.php
    ├── typing.html
    ├── valid.php
    ├── whatsapp.html
    └── whatsapp.jpeg


---

## ℹ️ About the Project

The **MIT Chatbot & Services** Web Platform integrates both service pages and a chatbot interface to support various campus services. It includes:

- **Chatbox / Messenger popup** functionality (via included zip)  
- **User account / registration / login** handling  
- **Complaint / request management**  
- **Library, transport, outpass, cleaning, club** services modules  
- **Email notifications / mail sending**  
- **Text lemmatization / NLP processing** via `lemmatizer.php`  
- Static pages like `privacy.php`, `contact`, etc.  

The platform is built in **PHP backend**, with frontend components in HTML, JS, CSS, and possibly React (since there is `contact.jsx`).  

---

## 🛠 Tech Stack & Libraries

- **Backend / Server**: PHP  
- **Frontend**: HTML, CSS, JavaScript (and possibly React JSX)  
- **NLP / Text Processing**: `lemmatizer.php` (or PHP-based lemmatizer)  
- **Database**: SQL files (`chats.sql`, `login.sql`)  
- **Email / Mail**: `mailsend.php`  
- **Library / Services Modules**: `mit_library.php`, `mit_transport.php`, `mit_club.php`, etc.  

---

## 🚀 How to Setup & Run Locally

1. **Clone the Repository**

    ```bash
    git clone https://github.com/Ravi2ie/MIT-Chatbot-and-Services-WebPlatform.git
    cd MIT-Chatbot-and-Services-WebPlatform

2. **Set up Web Server / PHP Environment**
  
  - Use XAMPP, WAMP, LAMP, or any PHP-enabled server
  
  - Place the folder in the web root (e.g. htdocs or www)

3. **Set up Database**

  - Import login.sql and chats.sql into your MySQL / MariaDB
  
  - Update configuration in database_1.php (or similar) to match database credentials

4. **Install Dependencies (if any)**

  - If using Composer for PHP packages:
     ```bash
     composer install


Also, if package.json exists, run:
    
    
    npm install


5. **Access via Browser**

Open http://localhost/your-folder/index.php (or appropriate path)

## ⚙️ Usage & Features
  
  - Chat Interface: Messenger-style popup chat (from 14memasang-chat-box-popup-messenger.zip)
  
  - User flows: signup, login, profile update, complaint submission

### Service modules:
  
  - mit_library.php – library operations
  
  - mit_transport.php – transport module
  
  - outpass.php / outpass_login.php – outpass module
  
  - mit_cleaner.php, room_cleaning.php, service.php – facility services
  
  - Text processing: lemmatizer.php to reduce words to base form
  
  - Mail sending: mailsend.php to handle emails

## 🔮 Future Enhancements (Suggested)

  - Integrate a more advanced NLP chatbot (with intent classification, entity extraction)
  
  - Use a JavaScript frontend framework (React, Vue) for more dynamic UI
  
  - Add WebSocket / real-time messaging for chat
  
  - Implement user roles (student, staff, admin)
  
  - Add dashboard / analytics for chat logs, complaint trends
  
  - Improve security (sanitize inputs, use prepared statements, implement CSRF protection)

## 🤝 Contributing

- Contributions are welcome!

1. **Fork this repository**

2. **Create a new branch:**

     ```bash
    git checkout -b feature-name


3. **Commit your changes:**

     ```bash
    git commit -m "Add new feature"


4. **Push to your branch:**

     ```bash
    git push origin feature-name


5. **Open a Pull Request**

# QuizApp 🎮

A **Kahoot-inspired** real-time quiz web application built with **PHP**, **MySQL**, and **Vanilla JavaScript**.

## Features

- 🎓 **Teacher Dashboard** — Create and manage quizzes, host live game sessions
- 🎯 **Student Join** — Join games instantly using a 6-digit PIN + nickname
- ⚡ **Real-time Gameplay** — Live question progression via polling
- 🏆 **Leaderboard** — Ranked scores shown at game end
- 🔐 **Authentication** — Secure login/registration with hashed passwords and role-based access

## Tech Stack

| Layer | Technology |
|-------|-----------|
| Backend | PHP (PDO) |
| Database | MySQL |
| Frontend | HTML, Vanilla CSS, Vanilla JS |
| Fonts | Google Fonts (Inter) |

## Database Schema

```
users → quizzes → questions → answers
              ↘ game_sessions → player_scores
```

## Setup & Installation

### Requirements
- PHP 7.4+
- MySQL 5.7+ or MariaDB
- A local server (e.g., XAMPP, WAMP, Laragon)

### Steps

1. **Clone the repository**
   ```bash
   git clone https://github.com/YOUR_USERNAME/YOUR_REPO_NAME.git
   cd YOUR_REPO_NAME
   ```

2. **Import the database**
   - Open phpMyAdmin (or any MySQL client)
   - Run the contents of `database.sql`

3. **Configure the database connection**
   - Copy the example config file:
     ```bash
     cp config.example.php config.php
     ```
   - Edit `config.php` with your database credentials:
     ```php
     $host = '127.0.0.1';
     $db   = 'quiz_app';
     $user = 'root';
     $pass = 'your_password';
     ```

4. **Run the project**
   - Place the folder inside your web server's root (e.g., `htdocs/` for XAMPP)
   - Visit `http://localhost/YOUR_REPO_NAME/`

## How to Play

1. **Teacher** registers an account, creates a quiz, and clicks **Host Game**
2. **Students** visit the homepage, enter the **game PIN** and a nickname
3. Teacher clicks **Start Game** — questions appear on all screens
4. Students select their answer before the timer runs out
5. At the end, a **leaderboard** shows the top scores

## Project Structure

```
├── index.html          # Student join page
├── login.php           # Login page
├── register.php        # Registration page
├── dashboard.php       # Teacher dashboard
├── create_quiz.php     # Quiz creation form
├── play_quiz.php       # Game engine + AJAX endpoints
├── leaderboard.php     # Score endpoint
├── logout.php          # Session logout
├── style.css           # Global styles
├── script.js           # Game loop & UI rendering
├── database.sql        # Database schema
└── config.example.php  # DB config template (copy to config.php)
```

## License

MIT

**📌 Project Overview**

This project is a basic login system built with PHP and PostgreSQL, styled with CSS for a user-friendly interface. It demonstrates the use of sessions for authentication, secure access to protected pages, and logout functionality. The project also includes front-end enhancements for a smoother user experience.

**🛠 Tools and Software Used**

Visual Studio Code (VS Code) – Code editor for writing and managing PHP, HTML, and CSS.

PostgreSQL – Database system for handling user credentials and data management.

Google Chrome – Browser for running and testing the application with developer tools.

GitHub – Version control and repository for code backup and project tracking.

**⚙️ Features**

User login with session handling.

Protected pages that only logged-in users can access.

Logout function that fully clears and destroys the session.

Styled interface with CSS, including animations and feedback messages.

Redirects after login and logout for smoother navigation.

**🚀 How to Run the Project**

Install PostgreSQL and ensure the service is running.

Configure your database and update the connection string in the PHP files.

Place the project files in your local server’s directory (e.g., htdocs or project folder).

Open the project in Google Chrome or any browser.

Log in using the valid credentials (hardcoded for demo purposes).

**⚡ Challenges Faced & Solutions**

PostgreSQL connection issues – Fixed by checking credentials, verifying the running service, and testing with psql before using PHP.

Session errors – Solved by adding session_start() at the top of every PHP file and avoiding output before header() calls.

CSS integration – Ensured correct file paths and separation of logic from presentation for consistent styling.

CREATE DATABASE elearning_db;

USE elearning_db;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255),
    role VARCHAR(20) DEFAULT 'student'
);


CREATE TABLE courses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    description TEXT,
    video_url VARCHAR(255)
);

INSERT INTO courses (title, description, video_url) VALUES
(
'HTML Basics for Beginners',
'Learn the fundamentals of HTML including tags, structure, and building your first webpage.',
'https://www.youtube.com/embed/qz0aGYrrlhU'
),
(
'CSS Complete Tutorial',
'Master CSS styling including colors, layouts, flexbox, and responsive design.',
'https://www.youtube.com/embed/1Rs2ND1ryYc'
),
(
'PHP for Beginners',
'Understand PHP basics, variables, loops, functions, and form handling.',
'https://www.youtube.com/embed/OK_JCtrrv-c'
),
(
'MySQL Database Tutorial',
'Learn how to create databases, tables, and run SQL queries effectively.',
'https://www.youtube.com/embed/7S_tz1z_5bA'
),
(
'Full Stack Web Development Overview',
'Introduction to full stack development using HTML, CSS, PHP, and MySQL.',
'https://www.youtube.com/embed/3JluqTojuME'
);


CREATE TABLE enrollments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    course_id INT,
    enrolled_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);



select * from users;
select * from enrollments;
select * from courses;
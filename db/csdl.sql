-- Tạo cơ sở dữ liệu
CREATE DATABASE quiz_app;
USE quiz_app;

-- Bảng Users
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin', 'user') NOT NULL
);

-- Bảng Topics
CREATE TABLE topics (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name_topics VARCHAR(255) NOT NULL,
    description_topics TEXT
);

-- Bảng Subtopics
CREATE TABLE subtopics (
    id INT AUTO_INCREMENT PRIMARY KEY,
    topic_id INT,
    name_subtopics VARCHAR(255) NOT NULL,
    description_subtopics TEXT,
    time_test INT NOT NULL, -- thời gian làm bài kiểm tra
    FOREIGN KEY (topic_id) REFERENCES topics(id) ON DELETE CASCADE
);

-- Bảng Questions
CREATE TABLE questions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    subtopic_id INT,
    question_text TEXT NOT NULL,
    answer_1 TEXT NOT NULL,
    answer_2 TEXT NOT NULL,
    answer_3 TEXT NOT NULL,
    answer_4 TEXT NOT NULL,
    correct_answer INT NOT NULL, -- 1, 2, 3, hoặc 4 để chỉ ra đáp án đúng
    FOREIGN KEY (subtopic_id) REFERENCES subtopics(id) ON DELETE CASCADE
);

-- Bảng UserAnswers
CREATE TABLE user_answers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    subtopics_id INT NOT NULL,
    point_test INT NOT NULL, -- điểm số bài kiểm tra
    selected_answer INT, -- 1, 2, 3, hoặc 4 để chỉ ra đáp án người dùng chọn
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (subtopics_id) REFERENCES subtopics(id)
);

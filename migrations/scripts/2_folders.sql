CREATE TABLE
    IF NOT EXISTS folders(
        id BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
        title VARCHAR(255) NOT NULL UNIQUE,
        created_at DATETIME DEFAULT NOW(),
        updated_at DATETIME DEFAULT NOW()
    );
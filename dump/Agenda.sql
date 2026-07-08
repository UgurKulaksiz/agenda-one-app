-- 1. Create the users table
CREATE TABLE IF NOT EXISTS "user" (
    id_user SERIAL PRIMARY KEY,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 2. Create the status table
CREATE TABLE IF NOT EXISTS status (
    id_status SERIAL PRIMARY KEY,
    label VARCHAR(50) NOT NULL UNIQUE
);

INSERT INTO status (id_status, label) VALUES 
(1, 'À venir'),
(2, 'En cours'),
(3, 'Terminé'),
(4, 'Annulé')
ON CONFLICT (id_status) DO NOTHING;

-- 3. Create the events table
DROP TABLE IF EXISTS event CASCADE;

CREATE TABLE event (
    id_event SERIAL PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    description TEXT,
    start_date TIMESTAMP NOT NULL,
    end_date TIMESTAMP NOT NULL,
	id_status INT NOT NULL DEFAULT 1,
    id_user INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    
    -- Foreign key to link the event to a user
    CONSTRAINT fk_event_user 
        FOREIGN KEY (id_user) 
        REFERENCES "user"(id_user) 
        ON DELETE CASCADE,

	CONSTRAINT fk_event_status 
        FOREIGN KEY (id_status) 
        REFERENCES status(id_status)
);
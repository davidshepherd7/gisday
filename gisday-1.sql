SET time_zone = '+0:00'; -- UTC time everywhere!


CREATE TABLE sessions (
    session_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(150) NOT NULL
);


CREATE TABLE attendees (
    attendee_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(150) NOT NULL,
    email VARCHAR(150) NOT NULL,
    employer VARCHAR(150) NULL,
    date_registered TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


CREATE TABLE attendee_attending_session(
    attendee_id INT NOT NULL REFERENCES attendees(attendee_id),
    session_id INT NOT NULL REFERENCES sessions(session_id)
);


-- Add some test data
INSERT INTO attendees(name) VALUES ('david s'), ('sylwia');
INSERT INTO sessions(name) VALUES ('learning how to draw maps'), ('esri');

INSERT INTO attendee_attending_session VALUES (1, 1);
INSERT INTO attendee_attending_session VALUES (2, 2);

SELECT attendees.name, email, employer, sessions.name
    FROM attendees
    LEFT JOIN attendee_attending_session USING (attendee_id)
    LEFT JOIN sessions USING (session_id);
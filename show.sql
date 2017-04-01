SELECT attendees.name, email, employer, sessions.name
    FROM attendees
    LEFT JOIN attendee_attending_session USING (attendee_id)
    LEFT JOIN sessions USING (session_id);

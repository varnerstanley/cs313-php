CREATE TABLE public.conferences (
    id SERIAL INT PRIMARY KEY,
    month INT NOT NULL,
    year INT NOT NULL
);

CREATE TABLE public.users (
    id SERIAL INT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    password VARCHAR(40) NOT NULL
);

CREATE TABLE public.sessions (
    id SERIAL PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    conference_id INT NOT NULL REFERENCES public.conferences(id)
);

CREATE TABLE public.notes (
    id SERIAL INT PRIMARY KEY,
    user_id INT NOT NULL REFERENCES public.users(id),
    speaker_id INT NOT NULL REFERENCES public.speakers(id),
    session_id INT NOT NULL REFERENCES public.sessions(id),
    text TEXT NOT NULL
);

CREATE TABLE public.speakers (
    id SERIAL INT PRIMARY KEY,
    name VARCHAR(40) NOT NULL 
);

INSERT INTO public.conferences(month, year) VALUES(4, 2019);
SELECT id FROM public.conferences;
INSERT INTO public.users(username, password) VALUES('johndoe', '$2$Ayfs...');
SELECT id FROM public.users;
INSERT INTO public.speakers(name) VALUES('Russell M. Nelson');
INSERT INTO public.sessions(name, conference_id) VALUES('Morning', 1);
SELECT id FROM public.sessions;
SELECT id FROM public.speakers;
INSERT INTO public.notes(user_id, session_id, speaker_id, session, text) VALUES(
    1,
    1,
    1,
    'Great talk'
)
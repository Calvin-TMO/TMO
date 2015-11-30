
DROP TABLE Report;
DROP TABLE CourseStudent;
DROP TABLE Section;
DROP TABLE CourseTutor;
DROP TABLE Course;
Drop TABLE Professor;
DROP TABLE Student;


CREATE TABLE Student (
    id integer,
    fname varchar(70) NOT NULL,
    lname varchar(70) NOT NULL,
    email varchar(16) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE Professor (
    id integer,
    fname varchar(70) NOT NULL,
    lname varchar(70) NOT NULL,
    email varchar(16) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE Course (
    id integer,
    department varchar(5) NOT NULL,
    num varchar(4) NOT NULL,
    description varchar(128),
    PRIMARY KEY (id)
);

CREATE TABLE CourseTutor (
    courseid integer,
    tutorid integer,
    FOREIGN KEY (courseid) REFERENCES Course(id) ON DELETE CASCADE,
    FOREIGN KEY (tutorid) REFERENCES Student(id) ON DELETE CASCADE
);

CREATE TABLE CourseStudent (
    id integer,
    courseid integer,
    studentid integer,
    tutorid integer,
    professorid integer,
    assigneddate date,
    terminationdate date,
    PRIMARY KEY (id),
    FOREIGN KEY (courseid) REFERENCES Course(id) ON DELETE CASCADE,
    FOREIGN KEY (studentid) REFERENCES Student(id) ON DELETE CASCADE,
    FOREIGN KEY (tutorid) REFERENCES Student(id) ON DELETE CASCADE,
    FOREIGN KEY (professorid) REFERENCES Professor(id) ON DELETE CASCADE
);

CREATE TABLE Report (
    id integer,
    coursestudentid integer,
    submitdate date,
    details varchar(128),
    PRIMARY KEY (id),
    FOREIGN KEY (coursestudentid) REFERENCES CourseStudent(id) ON DELETE CASCADE
);


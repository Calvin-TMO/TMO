
DROP TABLE IF EXISTS Report;
DROP TABLE IF EXISTS CourseStudent;
DROP TABLE IF EXISTS CourseTutor;
DROP TABLE IF EXISTS Course;
Drop TABLE IF EXISTS Professor;
DROP TABLE IF EXISTS Student;


CREATE TABLE Student (
    id integer AUTO_INCREMENT,
    fname varchar(70) NOT NULL,
    lname varchar(70) NOT NULL,
    email varchar(16) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE Professor (
    id integer AUTO_INCREMENT,
    fname varchar(70) NOT NULL,
    lname varchar(70) NOT NULL,
    email varchar(16) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE Course (
    id integer AUTO_INCREMENT,
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
    id integer AUTO_INCREMENT,
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
    id integer AUTO_INCREMENT,
    coursestudentid integer NOT NULL,
    submitdate date NOT NULL,
    starttime time NOT NULL,
    endtime time NOT NULL,
    topic varchar(128) NOT NULL,
    response varchar(128) NOT NULL,
    plans varchar(128) NOT NULL,
    studentplans varchar(128) NOT NULL,
    comments varchar(128) DEFAULT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (coursestudentid) REFERENCES CourseStudent(id) ON DELETE CASCADE
);


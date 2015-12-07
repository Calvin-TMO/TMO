
INSERT INTO Student (fname, lname, email) VALUES("Mark", "Vander Stel", "mbv26");
INSERT INTO Student (fname, lname, email) VALUES("Benjamin", "Braker", "bcb9");
INSERT INTO Student (fname, lname, email) VALUES("Carson", "Wiens", "clw26");

INSERT INTO Professor (fname, lname, email) VALUES("Keith", "VanderLinden", "kvlinden");

INSERT INTO Course (department, num, description) VALUES("CS", "396", "Senior Project I");
INSERT INTO Course (department, num, description) VALUES("CS", "398", "Senior Project II");

INSERT INTO CourseTutor VALUES(1, 2);

INSERT INTO CourseStudent (courseid, studentid, tutorid, professorid, assigneddate, terminationdate) VALUES(1, 1, 2, 1, '2015-09-01', '2015-12-18');

INSERT INTO Report (coursestudentid, submitdate, starttime, endtime, topic, response, plans, studentplans, comments) VALUES (1, '2015-11-30', '00:00:00', '00:30:00', "Big-O notation", "aggressively", "Study harder", "Get more sleep", NULL);


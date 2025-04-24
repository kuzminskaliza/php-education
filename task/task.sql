CREATE TABLE students
(
    id    SERIAL PRIMARY KEY,
    name  TEXT NOT NULL,
    age   INT  NOT NULL,
    grade TEXT
);


CREATE TABLE courses
(
    id   SERIAL PRIMARY KEY,
    name TEXT NOT NULL
);


CREATE TABLE student_courses
(
    student_id INT REFERENCES students (id),
    course_id  INT REFERENCES courses (id),
    PRIMARY KEY (student_id, course_id)
);


INSERT INTO students (name, age, grade)
VALUES ('Оля', 19, 'B'),
       ('Петро', 20, 'A'),
       ('Іван', 17, 'C'),
       ('Марія', 22, 'B'),
       ('Софія', 16, 'A');


INSERT INTO courses (name)
VALUES ('Математика'),
       ('Історія'),
       ('Фізика');


INSERT INTO student_courses (student_id, course_id)
VALUES (1, 1),
       (1, 2),
       (2, 1),
       (3, 3),
       (4, 2),
       (5, 1);

--Імена студентів і курси, які вони вивчають (тільки "Математика")
select students.name, courses.name
from students
join student_courses sc on students.id = sc.student_id
join courses on sc.courses_id = courses.id
where courses.name = 'Математика';

--список усіх студентів
select name from students;

--список усіх курсів
select * from courses;

--студенти які записані хоча б на один курс
select students.name
from students
join student_courses sc on students.id = sc.student_id;

--студенти які не записані на жоден курс
select students.name from students
left join student_courses sc on students.id = sc.student_id
where sc.student_id is null;

--студенти які не вивчають історію
select students.name, courses.name
from students
left join student_courses sc on students.id = sc.student_id
left join courses on sc.course_id = courses.id
where courses.name = 'Історія' and sc.student_id is null;

--скільки студентів вивчає кожен курс
select courses.name, count(sc.student_id) as students_count
from courses
join student_courses sc on courses.id = sc.course_id
group by courses.name;

--студенти які записані більше ніж на 1 курс
select students.name, count(sc.course_id) as course_count
from students
join student_courses sc on students.id = sc.student_id
group by students.name
having count(sc.course_id) > 1;

--Список студентів віком до 18 років
select * from students where age <= 18;

--Вивести курси, які вивчає "Оля"
select students.name = 'Оля'
from students
join student_courses sc on students.id = sc.student_id
join courses c2 on c2.id = sc.course_id;

--Знайти студентів, які вивчають "Фізику" або "Історію"
select students.name
from students
join student_courses sc on students.id = sc.student_id
join courses on sc.course_id = courses.id
where courses.name in ('Фізика', 'Історія');

--Середній вік студентів, які вивчають "Математику"
select AVG(students.age) as avg_age
from students
join student_courses sc on students.id = sc.student_id
join courses on sc.course_id = courses.id
where courses.name = 'Математика';

--Кількість курсів для кожного студента, навіть тих, хто нічого не вивчає
select students.name, count(sc.course_id) as course_count
from students
left join student_courses sc on students.id = sc.student_id
group by students.name
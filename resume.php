<?php
class Job {
    public function __construct(
        public string $name,
        public string $place,
        public string $times,
        public string $title,
        public string $descrip
    ) {
    }
}

class Project {
    public function __construct(
        public string $name,
        public string $link,
        public string $desc
    ) {
    }
}


$jobs = [
        new Job(name: 'Auto Excel', place: 'Lexington, KY', times: 'Oct 2024 - Apr 2025', title: 'Technician', descrip: 'Diagnosed and resolved complex mechanical issues, delivering fast and accurate solutions. Managed multiple repair jobs daily, 
        ensuring high quality under pressure. Communicated technical issues clearly to non-technical customers.'),
        new Job(name: 'Kentucky National Guard', place: 'Blue Grass Army Depot', times: 'Aug 2018 - Aug 2024', title: '91B - Wheeled Vehicle Mechanic', descrip: 'Maintained and repaired a fleet of military vehicles on schedule. Collaborated with team 
        members on diagnostics and part replacement. Maintained strict documentation and followed detailed technical manuals.'),
         new Job(name: 'Whole Foods Market', place: 'Lexington, KY', times: 'Oct 2019 - Jun 2024', title: 'Meat Team Member', descrip: 'Provided excellent customer service and educated customers on product options. Built trust through consistent communication and attention to 
         detail.'),
         new Job(name: 'Car Town Kia', place: 'Nicholasville, KY', times: 'Jun 2024 - Oct 2024', title: 'Express Technician', descrip: 'Prioritized customer vehicles based on urgency, handled quick-turn services and engine 
diagnostics. Balanced customer service responsibilities with hands-on mechanical work.'),
]

$projects = [
    new Project(name: 'To Do list', link: 'https://rdg97.github.io/todo-2/', desc: 'A ReactJS productivity app using localStorage to track tasks with a user-friendly 
interface. '),
    new Project(name: 'Project Redline', link: 'https://project-redline123.web.app/', desc: 'Twitter clone using ReactJS + Django. Integrated CarQuery API for dynamic vehicle 
data. 
'),
    new Project(name: 'Django Djams', link: 'https://github.com/RDG97/django-djams', desc: 'REST API built with Django/PostgreSQL for querying artist discographies. Used 
test-driven development.'),
];
?>
import React from 'react';
import { Link } from 'react-router-dom';

const StudentDb = (props) => {
    const { name, id, cgpa } = props.students;
    return ( <
        div className = "StudentList" >
        <
        Link to = { "/studentdetails/" + id + "/" + name + "/" + cgpa } > < b > Name: { name } < /b></Link >
        ID: { id }
        CGPA: { cgpa } <
        /div>

    );
};

export default StudentDb;
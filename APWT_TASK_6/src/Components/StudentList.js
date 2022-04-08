import React, { useState } from 'react';
import StudentDb from './StudentDb';

function StudentList(props) {
    const data = [{ name: 'Amir Habib', id: '19-41429-3', cgpa: '3.88' }, { name: 'Riyaz Hossan', id: '19-41432-3', cgpa: '3.93' }, { name: 'Nafiur Rahman', id: '19-41457-3', cgpa: '3.7' }]
    const [studentdb] = useState(data)
    return ( <
            div > {
                studentdb.map(student => < StudentDb students = { student }
                    />)} < /
                    div >
                )
            }

            export default StudentList;
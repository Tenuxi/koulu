import React from 'react';
import './Box.css';

const Box = (props) => {

    return (
    <div className='box'>
      <h1>{props.name}</h1>
      <p>{props.age}</p>
      <p>{props.title}</p>
    </div>
    );
}    

export default Box;
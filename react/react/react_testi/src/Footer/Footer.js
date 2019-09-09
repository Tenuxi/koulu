import React from 'react';
import './Footer.css';

const Footer = (props) => {
  return (
    <div className='footer'>
      <h2>{props.title}</h2>
    </div>
  );
}

export default Footer;
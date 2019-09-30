import React from 'react';
import './Footer.css';

const Footer = (props) => {
    return (
        <div className="footer">
            <h3>{props.slogan}</h3>
        </div>
    );
}

export default Footer;
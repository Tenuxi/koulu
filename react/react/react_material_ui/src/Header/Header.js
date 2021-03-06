import React from 'react';
import './Header.css';


const Header = (props) => {
    return (
        <div className="header">
            <h1>{props.title}</h1>
            <h4>{props.slogan}</h4>
            <image>{props.image}</image>
        </div>
    );
}



export default Header;
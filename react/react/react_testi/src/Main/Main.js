import React from 'react';
import './Main.css';
import Box from '../Box/Box';

const Main = (props) => {

  const handleClick = () => {
    console.log("Button was clicked");
    alert("Button was clicked");
  }

  return (
    <div className='main'>
        
      <h2>{props.title}</h2>
      <p>{props.text}</p>
      <button className='mainButton' onClick={handleClick}>Click Me!</button>

      <div class="boxit">
          <Box
          name='Joonas'
          age='33'
          title='Testi'
            />
          <Box
          name='Pekka'
          age='33'
          title='Testi'
          />
          <Box 
          name='Jokke'
          age='33'
          title='Testi'
          />
      </div>
    </div>
  );
}

export default Main;
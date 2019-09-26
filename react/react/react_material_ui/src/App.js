import React from 'react';
// import ReactDOM from 'react-dom';
import Button from '@material-ui/core/Button';

import Header from './Header/Header';
import Navigation from './Navigation/Navigation';

function App() {
  return (


    
    <div className="App">
      <React.Fragment>

        <Header 
        
        title='Kasvi kauppa' 
        slogan='halvat viherkasvit'
        
        />
          
        
        <Navigation
        
         // <Button variant="contained" color="secondary">
         // Nappi
         // </Button>
        
        />
        
        </React.Fragment>
    </div>
  );
}



export default App;

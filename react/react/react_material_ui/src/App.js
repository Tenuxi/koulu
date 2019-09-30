import React from 'react';


import Header from './Header/Header';
import Navigation from './Navigation/Navigation';
import Main from './Main/Main';
import Footer from './Footer/Footer';
import Kortit from './Main/Kortit/Kortit';


const App = () => {
  return (


    
    <div className="App">
      <React.Fragment>

        <Header 
        image='<img'
        title='Kasvi kauppa' 
        slogan='halvat viherkasvit'
        
        />
          
        
        <Navigation/>
        
        <Main>
          <Kortit />
          
        </Main>

        <Footer 
        slogan='Copyright - Joonas 2019'
        />
          
        

        </React.Fragment>
    </div>
  );
}



export default App;

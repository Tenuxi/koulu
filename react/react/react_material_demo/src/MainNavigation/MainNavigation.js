import React from 'react';
import { List, ListItemText, ListItem, Typography } from '@material-ui/core';
import { makeStyles } from '@material-ui/styles';

const useStyles = makeStyles({
    root: {
        margin: "100px 0 0 0",
    },
    listitem: {
        display: "inline-block",
        width: 150,
        textAlign: "right",        
    },
    
  });


const listitems = [
    {
            text:"Etusivu",
            id: 1
    },
    {
        text:"ToiNen",
        id: 2
    },
    {
        text:"KolMasSivu",
        id: 3
    },
    {
        text:"4SiVu",
        id: 4
    },
    {
        text:"ViiTossivu",
        id: 5
    },
]

const MainNavigation = () => {
    const classes = useStyles();
    return (
        <div>
            <List component="nav">
                {listitems.map(item => (
                <ListItem className={classes.listitem} key={item.id}>
                    <ListItemText>
                        <Typography>
                            {item.text}
                        </Typography>
                    </ListItemText>
                </ListItem>
                ))}
            </List>


        </div>
    );
};

export default MainNavigation;
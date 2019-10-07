import React from 'react';
import { List, ListItemText, ListItem, Typography } from '@material-ui/core';
import { makeStyles } from '@material-ui/styles';
import AccountBalanceIcon from '@material-ui/icons/AccountBalance';
import Icon from '@material-ui/core/Icon';

import { BrowserRouter as Router, Route, Link } from "react-router-dom";

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
            path: '/',
            id: 1
    },
    {
        text:"Contact",
        path: '/contact',
        id: 2
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
                        {/* <Typography>
                        <Icon>star</Icon> {item.text}
                        </Typography> */}
                        <Link to={item.path}>{item.text}</Link>
                    </ListItemText>
                </ListItem>
                ))}
            </List>


        </div>
    );
};

export default MainNavigation;
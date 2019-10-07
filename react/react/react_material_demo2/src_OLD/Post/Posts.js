import React from 'react';
import { makeStyles } from '@material-ui/styles';
import Card from '@material-ui/core/Card';
import CardActions from '@material-ui/core/CardActions';
import CardContent from '@material-ui/core/CardContent';
import CardMedia from '@material-ui/core/CardMedia';
import Button from '@material-ui/core/Button';
import { Typography, CardHeader } from '@material-ui/core';
import Grid from '@material-ui/core/Grid';
import { Link } from 'react-router-dom';

// import PostData from './PostData/PostData';

// //KOMMENTOI POST ITEMS ULOS!!!!!!!!!---------------------------------------

// // const postitems = [
// //     {
// //         title: "postaus 1",
// //         image: "https://static-sls.smf.aws.sanomacloud.net/tiede.fi/s3fs-public/styles/large_main_image/public/main_media/tiede_vastaa_norsu.jpg?jXoLbPtzCwFL_SDug0peftV5lZ392iQE&itok=r80TzsE7&timestamp=1525869062",
// //         text: "ASDAFASFKLASFLKASFKALKALFNAKSFNAKNFANSF safASFASFSAFa safasfasfaaf",
// //         url: "http://google.fi",
// //         id: 1
// //     },
// //     {
// //         title: "postaus 2",
// //         image: "https://www.tunturisusi.com/norsut/norsu111.jpg",
// //         text: "safASFASFSAFa safasfasfaaf",
// //         url: "http://google.fi",
// //         id: 2
// //     },
// //     {
// //         title: "postaus 3",
// //         image: "https://www.kansanuutiset.fi/images/3941900-759x500.jpg",
// //         text: "ASDAFASFKLASFLKASFKALKALFNAKSfasfasfaaf",
// //         url: "http://google.fi",
// //         id: 3
// //     },
// //     {
// //         title: "postaus 4",
// //         image: "https://media.riemurasia.net/albumit/m10001/486842153.jpg",
// //         text: "ASDAFASFKLASFLKASFwerwerwetryrtuututryewtewtryryrertKALKALFNAKSfasfasfaaf",
// //         url: "http://google.fi",
// //         id: 4
// //     },
// //     {
// //         title: "postaus 5",
// //         image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT0xJ1KiK9804cZMjKmYw0fGtCOUGLtmNiFHmyK_iqdceFz2rZ7",
// //         text: "ASDAFASFKLASrtuturutrurturtururturuurrurturFLKASFKALKALFNAKSfasfasfaaf",
// //         url: "http://google.fi",
// //         id: 5
// //     },
// // ]

// ////--------------------------------------------------------------------


// const useStyles = makeStyles({
//     carditem: {
//         width: 200,
//         height: 350,
//         margin: 10,
//         padding: 5,
//     },

// });


// const Posts = () => {
//     const classes = useStyles();
//     return (
//         <div style={{ marginTop: "150px" }}>
//             <Grid container justify="center" alignItems="center">
//                 {postitems.map(item => (

//                     <Card className={classes.carditem} key={item.id}>

//                         <CardHeader>
                            
//                         </CardHeader>

//                         <CardMedia
//                             component="img"
//                             alt={item.image}
//                             height="180px"
//                             image={item.image}
//                         />

//                         <CardContent>
//                             <Typography>
//                                 {item.text}
//                             </Typography>
//                         </CardContent>

//                         <CardActions>
//                             <Button color="secondary" variant="outlined" href={item.url}>Lue lisää</Button>
//                         </CardActions>

//                     </Card>

//                 ))}
//             </Grid>
//         </div>
//     );
// };

// export default Posts;

import postdata from './PostData/PostData';

const useStyles = makeStyles({
  text: {
    overflow: 'hidden',
    height: 80,
  },
  card: {
    minWidth: 250
  },
  showMoreButton: {
    fontSize: '.6em',
  }
});


const Posts = ({ match }) => {
  const classes = useStyles();
  const posts = postdata;

  return (
    <div style={{ marginTop: 100, padding: 60}}>
      <Grid
        container
        direction="row"
        justify="center"
        spacing={2}>

        {posts.map(item => (

          <Grid item xs={3} key={item.id} className={classes.card}>

            <Card key={item.id} style={{ height: 450 }}>
              <CardMedia
                component='img'
                height="250px"
                image={item.image}
              />

              <CardContent style={{ height: 110 }}>
                <Typography variant="h6">
                  {item.title}
                </Typography>
                <Typography variant="body2" className={classes.text}>
                  {item.text}
                </Typography>
              </CardContent>

              <CardActions>

                  <Button
                    component={Link}
                    to={`/cards/${item.id}`}
                    variant="outlined"
                    color="primary"
                    label="Show more"
                    value="Show more"
                    className={classes.showMoreButton}
                  >
                    Show more
                </Button>
              
                {/* <Button variant="outlined" color="primary" href="https://bc.fi" target="_blank">Show more</Button> */}
                {/* <Link to={`/cards/${item.id}`}>Read more</Link> */}
              </CardActions>

            </Card>
          </Grid>
        ))}
      </Grid>
    </div>
  );
}

export default Posts;
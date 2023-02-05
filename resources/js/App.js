import React from 'react';
import { BrowserRouter as Router, Routes, Route } from "react-router-dom";
import MainNavbar from "./components/navbar/MainNavbar";
import Home from "./pages/Home";
import Footer from "./components/Footer/Footer";
import Wall from "./pages/Wall";
import Club from "./pages/Club";
import Courses from "./pages/Courses";
import Guide from "./pages/Guide";
import Blog from "./pages/Blog";
import News from "./pages/News";
import Gallery from "./pages/Gallery";
import External from "./pages/External";

function App() {
    return (
       <>
           <MainNavbar/>
           <Routes>
               <Route>
                   <Route index element={<Home />} />
                   <Route path="climbing-wall" element={<Wall />} />
                   <Route path="climbing-and-hiking-club" element={<Club />} />
                   <Route path="courses-and-training" element={<Courses />} />
                   {/*<Route path="news" element={<News />} />*/}
                   {/*<Route path="blog" element={<Blog />} />*/}
                   {/*<Route path="guide" element={<Guide />} />*/}
                   {/*<Route path="gallery" element={<Gallery />} />*/}
                   {/*<Route path="external" element={<External />} />*/}
               </Route>
           </Routes>
           <Footer/>
       </>
    )
}

export default App;

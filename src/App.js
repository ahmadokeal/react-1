// import logo from "./logo.svg";
import "./App.css";
import { Routes, Route } from "react-router-dom";
import Header from "./components/header";
import Home from "./routes/home";
import About from "./routes/about";
import Contact from "./routes/contact";
function App() {
  return (
    <div className="App">
      <Header />
      <Routes>
        <Route path="/" element={<Home />} />
        <Route path="/ab" element={<About />} />
        <Route path="/con" element={<Contact />} />
      </Routes>
    </div>
  );
}

export default App;

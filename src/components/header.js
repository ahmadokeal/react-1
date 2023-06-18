import { NavLink } from "react-router-dom";
function Header() {
  return (
    <>
      <header>
        <NavLink to="/">home</NavLink>
        <NavLink to="/ab">about</NavLink>
        <NavLink to="/con">contact</NavLink>
      </header>
    </>
  );
}
export default Header;

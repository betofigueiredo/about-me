import { Link, useLocation } from "@tanstack/react-router";

function Menu() {
  const { pathname } = useLocation();

  const isItemActive = {
    home: pathname === "/",
    blog: pathname.includes("/blog"),
    about: pathname === "/about",
  };

  const baseClass = "hover:text-black";
  const homeClass = isItemActive.home
    ? `${baseClass} text-black`
    : `${baseClass} text-[#48515A]`;
  const blogClass = isItemActive.blog
    ? `${baseClass} text-black`
    : `${baseClass} text-[#48515A]`;
  const aboutClass = isItemActive.about
    ? `${baseClass} text-black`
    : `${baseClass} text-[#48515A]`;

  return (
    <div className="text-center mb-14">
      {!isItemActive.home ? (
        <div className="mt-8 mb-5 font-display text-center text-xl text-[#575757]">
          Beto Figueiredo
        </div>
      ) : (
        <div className="h-20" />
      )}
      <ul className="flex justify-center space-x-4 text-sm uppercase font-sans font-medium tracking-widest">
        <li className="relative">
          <Link to="/" className={homeClass}>
            Home
          </Link>
          {isItemActive.home && (
            <div className="absolute w-full h-2 bg-[#FFFF81] -mt-2 -z-10" />
          )}
        </li>
        <li className="text-[#C7C7C7]">/</li>
        <li className="relative">
          <Link to="/blog" className={blogClass}>
            blog
          </Link>
          {isItemActive.blog && (
            <div className="absolute w-full h-2 bg-[#FFFF81] -mt-2 -z-10" />
          )}
        </li>
        <li className="text-[#C7C7C7]">/</li>
        <li className="relative">
          <Link to="/about" className={aboutClass}>
            About
          </Link>
          {isItemActive.about && (
            <div className="absolute w-full h-2 bg-[#FFFF81] -mt-2 -z-10" />
          )}
        </li>
        <li className="text-[#C7C7C7]">/</li>
        <li>
          <a
            href="https://github.com/betofigueiredo"
            target="_blank"
            rel="noopener"
            className={`${baseClass} text-[#48515A]`}
          >
            Github
          </a>
        </li>
        <li className="text-[#C7C7C7]">/</li>
        <li>
          <a
            href="https://www.linkedin.com/in/betof/"
            target="_blank"
            rel="noopener"
            className={`${baseClass} text-[#48515A]`}
          >
            LinkedIn
          </a>
        </li>
      </ul>
    </div>
  );
}

export default Menu;

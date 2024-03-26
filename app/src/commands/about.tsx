import Caret from "../components/Caret";

const about = (typed: string) => (
  <div className="relative w-auto text-xl pb-6">
    <Caret />
    {typed}
    <div className="pt-4 pl-10 text-slate-400">
      Hi, my name is <span className="text-cyan-400">Herberto</span>.
      <br />
      I've been working as a Software Engineer for over a decade, primarily with{" "}
      <span className="text-pink-600">Javascript</span> and{" "}
      <span className="text-pink-600">Python</span>.
      <br />
      <span className="text-pink-600">UX/UI</span> was always a passion, so
      normally I navigate through all areas of product development.
      <br />
      Currently living in paradise:{" "}
      <span className="text-cyan-400">Florianópolis, Brazil</span>.
    </div>
    <div className="text-slate-700 pl-10 pt-4">-------</div>
    <div className="pt-4 pl-10 text-slate-400">
      Find me elsewhere:
      <div>
        <a
          className="text-teal-400 hover:underline hover:text-teal-300"
          href="https://www.instagram.com/_betofigueiredo"
        >
          Instagram
        </a>{" "}
        /{" "}
        <a
          className="text-teal-400 hover:underline hover:text-teal-300"
          href="https://www.linkedin.com/in/betof/"
        >
          LinkedIn
        </a>{" "}
        /{" "}
        <a
          className="text-teal-400 hover:underline hover:text-teal-300"
          href="https://www.goodreads.com/betofigueiredo"
        >
          Goodreads
        </a>
      </div>
    </div>
    <div className="text-slate-700 pl-10 pt-4">-------</div>
    <div className="pt-4 pl-10 text-slate-400">
      Type <span className="text-cyan-400">curiosities</span> to know a little
      bit more, <span className="text-cyan-400">projects</span> to see what I've
      been working on, or <span className="text-cyan-400">help</span>.
    </div>
  </div>
);

export default about;

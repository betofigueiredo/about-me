import Caret from "../components/Caret";

const curiosities = (typed: string) => (
  <div className="relative w-auto text-xl pb-6">
    <Caret />
    {typed}
    <div className="pt-4 pl-10 text-slate-400">
      <div className="mb-3">
        <div className="text-cyan-400">B.A.S.E Jump</div>
        <div>I was a skydiver and B.A.S.E jumper when I was younger.</div>
        <div className="text-slate-500">
          Check some old videos here:{" "}
          <a
            className="text-teal-400 hover:underline hover:text-teal-300"
            href="https://vimeo.com/beto"
            target="_blank"
            rel="noopener noreferrer"
          >
            https://vimeo.com/beto
          </a>
        </div>
      </div>
    </div>
    <div className="text-slate-700 pl-10 pt-2">-------</div>
    <div className="pt-4 pl-10 text-slate-400">
      <div className="mb-3">
        <div className="text-cyan-400">Other sports</div>
        <div>
          I still love sports, but with more responsibility now. I do{" "}
          <span className="text-pink-600">rock climbing</span>,{" "}
          <span className="text-pink-600">BJJ</span> and{" "}
          <span className="text-pink-600">surfing</span>.
        </div>
      </div>
    </div>
    <div className="text-slate-700 pl-10 pt-2">-------</div>
    <div className="pt-4 pl-10 text-slate-400">
      <div className="mb-3">
        <div className="text-cyan-400">Literature</div>
        <div>
          My other passion is reading. Trying some of the classics right now.
        </div>
      </div>
    </div>
  </div>
);

export default curiosities;

import Caret from "../components/Caret";

const help = (typed: string) => (
  <div className="relative w-auto text-xl pb-6">
    <Caret />
    {typed}
    <div className="pt-4 pl-10 text-slate-500">
      <div className="pb-2 text-slate-400">Main commands:</div>
      <div>
        <span className="text-cyan-500">about</span>{" "}
        <span className="text-slate-800">---------</span> professional
        information about myself
      </div>
      <div>
        <span className="text-cyan-500">projects</span>{" "}
        <span className="text-slate-800">------</span> view my recent side
        projects
      </div>
      <div>
        <span className="text-cyan-500">curiosities</span>{" "}
        <span className="text-slate-800">---</span> some personal stuff
      </div>
    </div>
    <div className="pt-6 pl-10">
      <div className="pb-2 text-slate-400">CLI commands:</div>
      <div>
        <span className="text-slate-500">help</span>
      </div>
      <div>
        <span className="text-slate-500">clear</span>
      </div>
    </div>
  </div>
);

export default help;

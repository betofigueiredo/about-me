import Caret from "../components/Caret";

const notfound = (typed: string) => (
  <div className="relative w-auto text-xl pb-6">
    <Caret />
    {typed}
    <div className="text-slate-700 pl-4 pt-2">
      Command not found. Try <span className="text-cyan-500">help</span>
    </div>
  </div>
);

export default notfound;

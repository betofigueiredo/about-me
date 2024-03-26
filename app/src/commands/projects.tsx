import Caret from "../components/Caret";
import Project from "../components/Project";

const projects = (typed: string) => (
  <div className="relative w-auto text-xl pb-6">
    <Caret />
    {typed}
    <Project
      title="Drinquepedia"
      description="I created this website around 2009, in PHP, and decided is was time to redesign it. Just waited 15 years. I've opted for Flask due to limitations with the VPS hosting, which unfortunately blocks the use of FastAPI."
      technologies={["React", "Typescript", "Tailwind", "Flask", "MyPy"]}
      status="ONGOING"
      link="https://drinquepedia.com"
    />
    <div className="text-slate-700 pl-10 pt-2">-------</div>
    <Project
      title="Sudoku Board"
      description="I've wanted to study Svelte for some time, but I didn't have any project for it. I like Sudoku, and it provides some good challenges during development."
      technologies={["SvelteKit", "Typescript", "Tailwind"]}
      status="DONE"
      link="https://betofigueiredo.github.io/sudoku/"
    />
    <div className="text-slate-700 pl-10 pt-2">-------</div>
    <Project
      title="Drum Machine"
      description="I worked in an audio project in the past and always wanted to create a more complete drum machine for the browser."
      technologies={["React", "Typescript", "Tailwind", "Flask"]}
      status="ONGOING"
      link="https://github.com/betofigueiredo/drums-synthesizer"
    />
  </div>
);

export default projects;

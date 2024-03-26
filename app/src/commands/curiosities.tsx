import Caret from "../components/Caret";
import Project from "../components/Project";

const curiosities = (typed: string) => (
  <div className="relative w-auto text-xl pb-6">
    <Caret />
    {typed}
    <Project
      title="Drinquepedia"
      description="I created this website around 2009, in PHP, and decided is was time to redesign it. Just 15 years later. I'm using Flask because of the VPS I use to host it, it's not possible to use FastAPI."
      technologies={["React", "Typescript", "Flask", "MyPy"]}
      status="ONGOING"
      link="https://drinquepedia.com"
    />
  </div>
);

export default curiosities;

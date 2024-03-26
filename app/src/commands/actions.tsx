import about from "./about";
import blank from "./blank";
import help from "./help";
import notfound from "./notfound";
import projects from "./projects";

type Actions = {
  [key: string]: JSX.Element;
};

export const actions = (typed: string): JSX.Element => {
  const allActions: Actions = {
    "": blank(),
    help: help(typed),
    about: about(typed),
    projects: projects(typed),
  };
  return allActions[typed] ?? notfound(typed);
};

import { ReactElement } from "react";

const Project = ({
  title,
  description,
  technologies,
  status,
  link,
}: {
  title: string;
  description: string;
  technologies: string[];
  status: string;
  link: string;
}): ReactElement => {
  const statusColor = status === "DONE" ? "text-lime-500" : "text-cyan-500";

  return (
    <div className="pt-4 pl-10 text-slate-400">
      <div className="mb-3">
        <div className="text-cyan-400">{title}</div>
        <div>{description}</div>
        <div className="text-slate-500">
          Status: <span className={statusColor}>{status}</span>
        </div>
        <div className="pt-1 pb-1">
          {technologies.map((tech) => (
            <span
              key={tech}
              className="bg-slate-700 text-slate-300 rounded pl-2 pr-2 mr-2"
            >
              {tech}
            </span>
          ))}
        </div>
        <div className="text-slate-500">
          Visit here:{" "}
          <a
            className="text-teal-400 hover:underline hover:text-teal-300"
            href={link}
            target="_blank"
            rel="noopener noreferrer"
          >
            {link}
          </a>
        </div>
      </div>
    </div>
  );
};

export default Project;

type MainLink = {
  label: string;
  path: string;
};

const MainLinks = () => {
  const mainLinks: MainLink[] = [
    { label: "Introduction", path: "#" },
    { label: "Work experience", path: "#" },
    { label: "Strength", path: "#" },
    { label: "Weaknesses", path: "#" },
    { label: "Goals", path: "#" },
    { label: "Expectations", path: "#" },
  ];

  function isLastItem(idx: number) {
    return idx === mainLinks.length - 1;
  }

  return (
    <div className="relative z-10">
      {mainLinks.map((link, idx) => (
        <span
          key={link.label}
          className="font-serif text-[94px] text-[#EBEEF1] transition-colors hover:text-custom-green"
        >
          <a href={link.path}>{link.label}</a>
          {!isLastItem(idx) && (
            <>
              {" "}
              <span className="text-[#676C71]">/</span>{" "}
            </>
          )}
        </span>
      ))}
    </div>
  );
};

export default MainLinks;

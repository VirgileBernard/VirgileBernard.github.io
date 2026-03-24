import ThemeToggle from "./ThemeToggle";

export default function Layout({ children }) {
  return (
    <div className="layout">
      <header className="header">
        <h1 className="title">the berNimGame</h1>
        <ThemeToggle />
      </header>

      <main className="content">
        {children}
      </main>
    </div>
  );
}

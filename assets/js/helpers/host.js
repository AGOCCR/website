export default window.location.host.includes("localhost")
  ? window.location.origin + "/agoc"
  : window.location;

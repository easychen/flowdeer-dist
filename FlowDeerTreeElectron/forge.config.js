module.exports = {
  packagerConfig: {
    asar: true,
    name: "FlowDeer Tree",
    icon: "../FlowDeerTree/src-tauri/icons/icon.icns",
    platform: ['darwin', 'win32'],
    arch: ['x64', 'arm64']
  },
  rebuildConfig: {},
  makers: [
    {
      name: '@electron-forge/maker-squirrel',
      config: {
        platforms: ['win32'],
        arch: ['x64']
      },
    },
    {
      name: '@electron-forge/maker-zip',
      platforms: ['darwin'],
      arch: ['x64', 'arm64']
    },
    {
      name: '@electron-forge/maker-deb',
      config: {},
    },
    {
      name: '@electron-forge/maker-rpm',
      config: {},
    },
  ],
  plugins: [
    {
      name: '@electron-forge/plugin-auto-unpack-natives',
      config: {},
    },
  ],
};

# Updated for PM5 by fernanACM

[![Discord](https://img.shields.io/discord/800828802921529355.svg?label=&logo=discord&logoColor=ffffff&color=7389D8&labelColor=6A7EC2)](https://discord.gg/YyE9XFckqb) [![](https://poggit.pmmp.io/shield.api/ElevatorBlock)](https://poggit.pmmp.io/p/ElevatorBlock) [![](https://poggit.pmmp.io/shield.dl.total/ElevatorBlock)](https://poggit.pmmp.io/p/ElevatorBlock)

# Elevator
A simple PocketMine-MP plugin that allows to create elevators on your server.

## How to use
You just have to setup an id in the config.yml. Place 2 blocks aligned, jump to go up and sneak to go down.

## Video
[![Alt text](https://img.youtube.com/vi/9rcDk5-vRqc/0.jpg)](https://www.youtube.com/watch?v=9rcDk5-vRqc&ab_channel=Ayzrix)

## Config
```yaml
#      _       ____   __  __ 
#     / \     / ___| |  \/  |
#    / _ \   | |     | |\/| |
#   / ___ \  | |___  | |  | |
#  /_/   \_\  \____| |_|  |_|
# The creator of this plugin was fernanACM.
# https://github.com/fernanACM
prefix: "§6[§fElevatorBlock§6]"
# Elevator block name
block: "diamond block"
# EXAMPLE: If you are using the bone block, set to false to allow all rotations [Put anyway :0 on "block"]
use_meta: true
# Enable or disable the distance system (true|false)
distance: true

# Maximum distance between 2 elevators
max_distance: 5

# ==(CONFIGURATION)==
Settings:
  # ==(WORLD MANAGER)==
  # add to "whitelist" or "blacklist" modes
  WorldManager:
    # Valid modes:
    # - whitelist
    # - blacklist
    # - false
    mode: whitelist
    # Add the names of worlds that are in the whitelist
    worlds-whitelist:
      - "world"
      - "world-2"
      - "ACM"
    # Add the names of worlds that are in the blacklist
    worlds-blacklist:
      - "MinePvP"
      - "ZonePvP"

no_elevator_found: "{prefix} §cNo elevator was found"
distance_too_hight: "{prefix} §cAn elevator has been found, but it's too far"
```

